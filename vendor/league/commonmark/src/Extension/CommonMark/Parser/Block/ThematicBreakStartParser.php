<?php

declare(strict_types=1);

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AIMuseVendor\League\CommonMark\Extension\CommonMark\Parser\Block;

use AIMuseVendor\League\CommonMark\Parser\Block\BlockStart;
use AIMuseVendor\League\CommonMark\Parser\Block\BlockStartParserInterface;
use AIMuseVendor\League\CommonMark\Parser\Cursor;
use AIMuseVendor\League\CommonMark\Parser\MarkdownParserStateInterface;
use AIMuseVendor\League\CommonMark\Util\RegexHelper;

final class ThematicBreakStartParser implements BlockStartParserInterface
{
    public function tryStart(Cursor $cursor, MarkdownParserStateInterface $parserState): ?BlockStart
    {
        if ($cursor->isIndented()) {
            return BlockStart::none();
        }

        $match = RegexHelper::matchAt(RegexHelper::REGEX_THEMATIC_BREAK, $cursor->getLine(), $cursor->getNextNonSpacePosition());
        if ($match === null) {
            return BlockStart::none();
        }

        // Advance to the end of the string, consuming the entire line (of the thematic break)
        $cursor->advanceToEnd();

        return BlockStart::of(new ThematicBreakParser())->at($cursor);
    }
}
