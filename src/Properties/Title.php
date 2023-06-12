<?php

namespace Astrotomic\Vcard\Properties;

class Title extends Property
{
    public function __construct(protected string $title)
    {
    }

    public function __toString(): string
    {
        return "TITLE;CHARSET=UTF-8:{$this->title}";
    }
}
