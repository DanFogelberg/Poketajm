<?php

declare(strict_types=1);

namespace App\Database;

use PDO;

class QueryBuilder
{
    private string $query;

    public function __construct(
        private PDO $database
    ) {
    }

    public function select(array $columns = ['*']): static
    {
        $this->query = sprintf('SELECT %s', implode(', ', $columns));

        return $this;
    }

    public function from(string $table): static
    {
        $this->query = sprintf('%s FROM %s', $this->query, $table);

        return $this;
    }

    public function get(): array
    {
        $statement = $this->database->prepare($this->query);

        $statement->execute();

        if ($result = $statement->fetchAll(PDO::FETCH_CLASS)) {
            return $result;
        }

        return [];
    }

    public function limit(int $count):static
    {
        $this->query = sprintf('%s LIMIT %s', $this->query, $count);
        return $this;
    }

    public function orderBy(string $column, string $direction):static
    {
        $this->query = sprintf('%s ORDER BY %s %s', $this->query, $column, $direction);
        return $this;
    }

    public function first()
    {
        $this->limit(1);
        $statement = $this->database->prepare($this->query);
        $statement->execute();

        if ($result = $statement->fetch(PDO::FETCH_OBJ)) {
            return $result;
        }
        return $result; 
        
    }

    public function where( string $column, string $operator, string $value):static
    {
        $this->query = sprintf('%s WHERE %s %s %s', $this->query, $column, $operator, $value);
        return $this;
    }
    public function and(string $column, string $operator, string $value):static
    {
        $this->query = sprintf('%s AND %s %s %s', $this->query, $column, $operator, $value);
        return $this;
    }
    public function or(string $column, string $operator, string $value):static
    {
        $this->query = sprintf('%s OR %s %s %s', $this->query, $column, $operator, $value);
        return $this;
    }

}