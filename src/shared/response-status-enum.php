<?php

enum ResponseStatusEnum
{
  case SUCCESS;
  case NOT_FOUND;
  case UNAUTHORIZED;
  case FORBIDDEN;
  case VALIDATION_ERROR;
  case SERVER_ERROR;
  case BAD_REQUEST;

  public function get_name(): string
  {
    return match ($this) {
      self::SUCCESS => 'success',
      self::NOT_FOUND => 'not_found',
      self::UNAUTHORIZED => 'unauthorized',
      self::FORBIDDEN => 'forbidden',
      self::VALIDATION_ERROR => 'validation_error',
      self::SERVER_ERROR => 'server_error',
      self::BAD_REQUEST => 'bad_request',
    };
  }

  public function is_error(): bool
  {
    if ($this === self::SUCCESS) {
      return false;
    }

    return true;
  }
}
