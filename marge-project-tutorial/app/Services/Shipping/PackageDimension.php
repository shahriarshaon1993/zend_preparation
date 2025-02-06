<?php

declare(strict_types=1);

namespace App\Services\Shipping;

readonly class PackageDimension
{
    public function __construct(public int $width, public int $height, public int $length)
    {
        match (true) {
            $this->width < 0 || $this->width > 80 => throw new \InvalidArgumentException('Invalid billable width'),
            $this->height < 0 || $this->height > 70 => throw new \InvalidArgumentException('Invalid billable height'),
            $this->length < 0 || $this->length > 120 => throw new \InvalidArgumentException('Invalid billable length'),
            default => true,
        };
    }

    public function increaseWidth(int $width): self
    {
        return new self($this->width + $width, $this->height, $this->length);
    }

    public function equalTo(PackageDimension $other): bool
    {
        return $this->width === $other->width
            && $this->height === $other->height
            && $this->length === $other->length;
    }
}