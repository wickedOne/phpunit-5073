### bug 5073 reproduction
[actual ticket](https://github.com/sebastianbergmann/phpunit/issues/5073)

#### steps to reproduce

- `vendor/bin/phpunit`: tests ok, foo extension loaded
- `vendor/bin/phpunit --no-extensions`: test ok, foo extension loaded despite `--no-extensions` option 