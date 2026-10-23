# Publishing checklist

First time (both repositories are public):

1. Packagist account for the `rapttor` GitHub user. https://packagist.org/packages/submit : submit `https://github.com/rapttor/rapttor.legal`, then `https://github.com/rapttor/yii2-legal`. Submit `rapttor.legal` first; `yii2-legal` requires it.
2. In Packagist, enable the GitHub integration (or the webhook from the package page) so new tags are picked up automatically.
3. Optional: add the Packagist badge to the README once the package page exists.

Every release:

1. `php tools/build.php && php tests/run.php` (and `vendor/bin/phpunit -c phpunit.xml` in yii2-legal).
2. Update `CHANGELOG.md`; bump document `version`/`updated` for any text change.
3. Commit, tag `vX.Y.Z` (SemVer), `git push origin main --tags`. Packagist updates itself.
4. In `yii2-legal`, raise the `rapttor/legal` constraint only when it needs new library features or text.

A text change that alters rights or obligations is a MAJOR release (MINOR while below 1.0); sites must notify their users before adopting it. Tags are hard to retract once Packagist has seen them: do not tag a release you have not tested.
