<?php

function sayHello(string $name = "Sarah Mensah"): string {
    return "Hello {$name}";
}

echo sayHello();