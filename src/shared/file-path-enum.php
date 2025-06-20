<?php

enum FilePathEnum
{
  case HOME;
  case ACCOUNT;
  case POSTER;
  case POSTER_A3;
  case POSTER_A4;
  case MEDIA;
  case CREATE;
  case LOGIN;
  case REGISTER;
  case NOT_FOUND;

  public function get_path(): string
  {
    return match ($this) {
      self::HOME => self::get_sys_path('src/index.php'),
      self::ACCOUNT => self::get_sys_path('src/pages/account.php'),
      self::POSTER => self::get_sys_path('src/pages/poster.php'),
      self::POSTER_A3 => self::get_sys_path('src/pages/poster/a3.php'),
      self::POSTER_A4 => self::get_sys_path('src/pages/poster/a4.php'),
      self::MEDIA => self::get_sys_path('src/pages/media.php'),
      self::CREATE => self::get_sys_path('src/pages/create.php'),
      self::LOGIN => self::get_sys_path('src/pages/login.php'),
      self::REGISTER => self::get_sys_path('src/pages/register.php'),
      self::NOT_FOUND => self::get_sys_path('src/pages/not-found.php'),
    };
  }

  public static function get_sys_path(string $path = ''): string
  {
    return Config::get_base_path() . $path;
  }
}
