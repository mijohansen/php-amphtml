# php-amphtml ⚡

php-amphtml is a generated library out of the main amphtml repository.
It does not try to validate correct syntax, but provides the developer
with shorthand functions and classes to handle the amp tags.

Also it keep track of the dependencies and inject them accordingly in the
header of the document. This method can also be called directly.

The library comes with `AmpDocument.php` which uses Less as
its CSS generator. As AMP documents only can have one block of CSS it make
sense to have something like this. Again, this is more of a proof of
concept.

Be aware that the library is dependent on updates from
`xtazii/amp-library` to get new tags supported. The current file is over
1 year old.