# MediaWiki-Codesniffer release history #

## 0.5.0 / 2015-10-23 ##
* Add Generic.ControlStructures.InlineControlStructure to ruleset (Kunal Mehta)
* Add IfElseStructureSniff to handle else structures (TasneemLo)
* Handle multiple # comments in Space Before Comment (TasneemLo)
* Sniff to check assignment in while & if (TasneemLo)
* Sniff to warn when using dirname(__FILE__) (TasneemLo)

## 0.4.0 / 2015-09-26 ##
* Use upstream codesniffer 2.3.4 (Kunal Mehta & Paladox)
* Sniff to check for space in single line comments (Smriti.Singh)
* Automatically fix warnings caught by SpaceyParenthesisSniff (Kunal Mehta)
* Automatically fix warnings caught by SpaceAfterControlStructureSniff (Kunal Mehta)
* Add ignore list to PrefixedGlobalFunctionsSniff (Vivek Ghaisas)
* Add ignore list to ValidGlobalNameSniff (Vivek Ghaisas)
* Update jakub-onderka/php-parallel-lint to 0.9.* (Paladox)
* Automatically fix warnings caught by SpaceBeforeSingleLineCommentSniff (Kunal Mehta)

## 0.3.0 / 2015-06-19 ##
* Update README.md code formatting (Vivek Ghaisas)
* Don't require "wf" prefix on functions that are namespaced (Kunal Mehta)
* Simplify PHPUnit boostrap, require usage of composer for running tests (Kunal Mehta)
* SpaceyParenthesis: Check for space before opening parenthesis (Vivek Ghaisas)
* SpaceyParenthesesSniff: Search for extra/unnecessary space (Vivek Ghaisas)
* CharacterBeforePHPOpeningTagSniff: Support T_HASHBANG for HHVM >=3.5,<3.7 (Kunal Mehta)

## 0.2.0 / 2015-06-02 ##
* Fixed sniff that checks globals have a "wg" prefix (Divya)
* New sniff to detect unused global variables (Divya)
* New sniff to detect text before first opening php tag (Sumit Asthana)
* New sniff to detect alternative syntax such as "endif" (Vivek Ghaisas)
* New sniff to detect unprefixed global functions (Vivek Ghaisas)
* New sniff to detect "goto" usage (Harshit Harchani)
* Update ignore with some emacs files. (Mark A. Hershberger)
* Use upstream codesniffer 2.3.0 (Kunal Mehta)
* Make mediawiki/tools/codesniffer pass phpcs (Vivek Ghaisas)
* New sniff to check for spacey use of parentheses (Kunal Mehta)
* Modify generic pass test with a case of not-spacey parentheses (Vivek Ghaisas)
* Make failing tests fail only for specific respective reasons (Vivek Ghaisas)
* Change certain errors to warnings (Vivek Ghaisas)
* Update ExtraCharacters Sniff to allow shebang (Harshit Harchani)

## 0.1.0 / 2015-01-05 ##

* Initial tagged release