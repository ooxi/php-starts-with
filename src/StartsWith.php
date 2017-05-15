<?php declare(strict_types=1);

namespace Ooxi\StartsWith;



/**
 * @param string $haystack The string to search in
 * @param string $needle Subject
 *
 * @return boolean true iff. $haystack starts with $needle
 *
 * @author MrHus
 * @see https://stackoverflow.com/a/834355/2534648
 */
function startsWith(string $haystack, string $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}
