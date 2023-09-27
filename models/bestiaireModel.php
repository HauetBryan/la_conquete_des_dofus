<?php

class monsters {
    public int $id = 0;
    public string $name = "";
    public int $hpmin = 0;
    public int $hpmax = 0;
    public int $pa = 0;
    public int $pm = 0;
    public string $image = "";
    private PDO $db;
}