<?php

declare(strict_types=1);

namespace Laravelsu\Highlight\Languages\Php;

class PhpConst
{
    public const PHP_TYPES = [
        'string',
        'static',
        'array',
        'null',
        'bool',
        'void',
        'int',
        'mixed',
        'object',
        'self',
    ];
    
    public const PHP_KEYWORDS = [
        ...self::PHP_TYPES,
        'abstract',
        'and',
        'as',
        'break',
        'callable',
        'case',
        'catch',
        'class',
        'clone',
        'const',
        'continue',
        'declare',
        'default',
        'die',
        'do',
        'else',
        'elseif',
        'endif',
        'empty',
        'enum',
        'enddeclare',
        'endfor',
        'endforeach',
        'endswitch',
        'endwhile',
        'eval',
        'extends',
        'exit',
        'final',
        'finally',
        'fn',
        'for',
        'foreach',
        'function',
        'global',
        'goto',
        'if',
        'implements',
        'include',
        'include_once',
        'insteadof',
        'interface',
        'isset',
        'list',
        'match',
        'or',
        'parent',
        'print',
        'private',
        'protected',
        'public',
        'readonly',
        'require',
        'require_once',
        'return',
        'static',
        'switch',
        'throw',
        'trait',
        'try',
        'while',
        'yield',
        'namespace',
        'unset',
        'use',
        'xor',
        'yield from',
    ];
}
