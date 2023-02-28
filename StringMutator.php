<?php
// namespace Mutator;
// class StringMutator
// {
// public static function bold(string $word)
// {
// return sprintf('<b>%s</b>', $word);
// }
// public static function underline(string $word)
// {
// return sprintf('<u>%s</u>', $word);
// }
// public static function italic(string $word)
// {
// return sprintf('<i>%s</i>', $word);
// }
// public static function strike(string $word)
// {
// return sprintf('<strike>%s</strike>', $word);
// }
// }

// Trait StringMutator
trait StringMutator
{
public function bold(string $word): string
{
return sprintf('<b>%s</b>', $word);
}
public function italic(string $word): string
{
return sprintf('<i>%s</i>', $word);
}
public function boldItalic(string $word): string
{
return $this->italic($this->bold($word));
}
}
