<?php

class User
{
    private $username;
    private $password;
    private $email;
    private $isPremium;

    public function __construct(string $username, string $password, string $email, bool $isPremium)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->isPremium = $isPremium;
    }

    public function getUserName() {
        return $this->username;
    }

    public function setUsername(string $username): void {
        $this->username = $username;
    }

    public function getEmail (): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getPassword (): string {
        return $this->password;
    }

    public function setPassword(string $password) : void {
        $this->password = $password;
    }

    public function getIsPremium() : bool {
        return $this->isPremium;
    }

    public function setIsPremium(bool $isPremium): void {
        $this->isPremium = $isPremium;
    }
}
