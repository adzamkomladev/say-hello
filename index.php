<?php

function sayHello(string $name = "Sarah Mensah"): string {
    return "Hello {$name}";
}

function sayName(string $name): string {
    return "Hey {$name}";
}

echo sayHello();
echo sayName("Komla Adzam");