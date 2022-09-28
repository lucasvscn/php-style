<?php

return [
    '@PHP81Migration' => true,
    '@PSR12' => true,
    // Each line of multi-line DocComments must have an asterisk [PSR-5] and must be aligned with the first one.
    'align_multiline_comment' => true,
    // Each element of an array must be indented exactly once.
    'array_indentation' => true,
    // Converts backtick operators to `shell_exec` calls.
    'backtick_to_shell_exec' => true,
    // Binary operators should be surrounded by space as configured.
    'binary_operator_spaces' => true,
    // An empty line feed must precede any configured statement.
    'blank_line_before_statement' => true,
    // A single space or none should be between cast and variable.
    'cast_spaces' => true,
    // Class, trait and interface elements must be separated with one or none blank line.
    'class_attributes_separation' => true,
    // When referencing an internal class it must be written using the correct casing.
    'class_reference_name_casing' => true,
    // Using `isset($var) &&` multiple times should be done in one call.
    'combine_consecutive_issets' => true,
    // Calling `unset` on multiple items should be done in one call.
    'combine_consecutive_unsets' => true,
    // Concatenation should be spaced according configuration.
    'concat_space' => ['spacing' => 'one'],
    // The body of each control structure MUST be enclosed within braces.
    'control_structure_braces' => true,
    // Control structure continuation keyword must be on the configured line.
    'control_structure_continuation_position' => true,
    // There must not be spaces around `declare` statement parentheses.
    'declare_parentheses' => true,
    // Replaces short-echo `<?=` with long format `<?php echo`/`<?php print` syntax, or vice-versa.
    'echo_tag_syntax' => true,
    // Empty loop-body must be in configured style.
    'empty_loop_body' => true,
    // Empty loop-condition must be in configured style.
    'empty_loop_condition' => true,
    // Escape implicit backslashes in strings and heredocs to ease the understanding of which are special chars interpreted by PHP and which not.
    'escape_implicit_backslashes' => true,
    // Add curly braces to indirect variables to make them clear to understand. Requires PHP >= 7.0.
    'explicit_indirect_variable' => true,
    // Converts implicit variables into explicit ones in double-quoted strings or heredoc syntax.
    'explicit_string_variable' => true,
    // Transforms imported FQCN parameters and return types in function arguments to short version.
    'fully_qualified_strict_types' => true,
    // Ensure single space between function's argument and its typehint.
    'function_typehint_space' => true,
    // Renames PHPDoc tags.
    'general_phpdoc_tag_rename' => true,
    // Imports or fully qualifies global classes/functions/constants.
    'global_namespace_import' => ['import_constants' => true, 'import_functions' => true],
    // Convert `heredoc` to `nowdoc` where possible.
    'heredoc_to_nowdoc' => true,
    // Include/Require and file path should be divided with a single space. File path should not be placed under brackets.
    'include' => true,
    // Pre- or post-increment and decrement operators should be used if possible.
    'increment_style' => true,
    // Integer literals must be in correct case.
    'integer_literal_case' => true,
    // Lambda must not import variables it doesn't use.
    'lambda_not_used_import' => true,
    // Ensure there is no code on the same line as the PHP open tag.
    'linebreak_after_opening_tag' => true,
    // Magic constants should be referred to using the correct casing.
    'magic_constant_casing' => true,
    // Magic method definitions and calls must be using the correct casing.
    'magic_method_casing' => true,
    // Method chaining MUST be properly indented. Method chaining with different levels of indentation is not supported.
    'method_chaining_indentation' => true,
    // DocBlocks must start with two asterisks, multiline comments must start with a single asterisk, after the opening slash. Both must end with a single asterisk before the closing slash.
    'multiline_comment_opening_closing' => true,
    // Forbid multi-line whitespace before the closing semicolon or move the semicolon to the new line for chained calls.
    'multiline_whitespace_before_semicolons' => true,
    // Function defined by PHP should be called using the correct casing.
    'native_function_casing' => true,
    // Native type hints for functions should use the correct case.
    'native_function_type_declaration_casing' => true,
    // Master language constructs shall be used instead of aliases.
    'no_alias_language_construct_call' => true,
    // Replace control structure alternative syntax to use braces.
    'no_alternative_syntax' => true,
    // There should not be a binary flag before strings.
    'no_binary_string' => true,
    // There should not be blank lines between docblock and the documented element.
    'no_blank_lines_after_phpdoc' => true,
    // There should not be any empty comments.
    'no_empty_comment' => true,
    // There should not be empty PHPDoc blocks.
    'no_empty_phpdoc' => true,
    // Remove useless (semicolon) statements.
    'no_empty_statement' => true,
    // Removes extra blank lines and/or blank lines following configuration.
    'no_extra_blank_lines' => true,
    // The namespace declaration line shouldn't contain leading whitespace.
    'no_leading_namespace_whitespace' => true,
    // Either language construct `print` or `echo` should be used.
    'no_mixed_echo_print' => true,
    // Operator `=>` should not be surrounded by multi-line whitespaces.
    'no_multiline_whitespace_around_double_arrow' => true,
    // There must not be more than one statement per line.
    'no_multiple_statements_per_line' => true,
    // Properties MUST not be explicitly initialized with `null` except when they have a type declaration (PHP 7.4).
    'no_null_property_initialization' => true,
    // Short cast `bool` using double exclamation mark should not be used.
    'no_short_bool_cast' => true,
    // Single-line whitespace before closing semicolon are prohibited.
    'no_singleline_whitespace_before_semicolons' => true,
    // There MUST NOT be spaces around offset braces.
    'no_spaces_around_offset' => true,
    // Replaces superfluous `elseif` with `if`.
    'no_superfluous_elseif' => true,
    // Removes `@param`, `@return` and `@var` tags that don't provide any useful information.
    'no_superfluous_phpdoc_tags' => true,
    // If a list of values separated by a comma is contained on a single line, then the last item MUST NOT have a trailing comma.
    'no_trailing_comma_in_singleline' => true,
    // Removes unneeded parentheses around control statements.
    'no_unneeded_control_parentheses' => true,
    // Removes unneeded curly braces that are superfluous and aren't part of a control structure's body.
    'no_unneeded_curly_braces' => true,
    // Imports should not be aliased as the same name.
    'no_unneeded_import_alias' => true,
    // Unused `use` statements must be removed.
    'no_unused_imports' => true,
    // There should not be useless `else` cases.
    'no_useless_else' => true,
    // There should not be useless `null-safe-operators` `?->` used.
    'no_useless_nullsafe_operator' => true,
    // There should not be an empty `return` statement at the end of a function.
    'no_useless_return' => true,
    // Logical NOT operators (`!`) should have one trailing whitespace.
    'not_operator_with_successor_space' => true,
    // Adds or removes `?` before type declarations for parameters with a default `null` value.
    'nullable_type_declaration_for_default_null_value' => true,
    // There should not be space before or after object operators `->` and `?->`.
    'object_operator_without_whitespace' => true,
    // Operators - when multiline - must always be at the beginning or at the end of the line.
    'operator_linebreak' => true,
    // PHPUnit annotations should be a FQCNs including a root namespace.
    'php_unit_fqcn_annotation' => true,
    // All PHPUnit test classes should be marked as internal.
    'php_unit_internal_class' => true,
    // Enforce camel (or snake) case for PHPUnit test methods, following configuration.
    'php_unit_method_casing' => ['case' => 'snake_case'],
    // Adds a default `@coversNothing` annotation to PHPUnit test classes that have no `@covers*` annotation.
    'php_unit_test_class_requires_covers' => true,
    // PHPDoc should contain `@param` for all params.
    'phpdoc_add_missing_param_annotation' => true,
    // All items of the given phpdoc tags must be either left-aligned or (by default) aligned vertically.
    'phpdoc_align' => true,
    // PHPDoc annotation descriptions should not be a sentence.
    'phpdoc_annotation_without_dot' => true,
    // Docblocks should have the same indentation as the documented subject.
    'phpdoc_indent' => true,
    // Fixes PHPDoc inline tags.
    'phpdoc_inline_tag_normalizer' => true,
    // `@access` annotations should be omitted from PHPDoc.
    'phpdoc_no_access' => true,
    // No alias PHPDoc tags should be used.
    'phpdoc_no_alias_tag' => true,
    // `@return void` and `@return null` annotations should be omitted from PHPDoc.
    'phpdoc_no_empty_return' => true,
    // `@package` and `@subpackage` annotations should be omitted from PHPDoc.
    'phpdoc_no_package' => true,
    // Classy that does not inherit must not have `@inheritdoc` tags.
    'phpdoc_no_useless_inheritdoc' => true,
    // Annotations in PHPDoc should be ordered in defined sequence.
    'phpdoc_order' => true,
    // Order phpdoc tags by value.
    'phpdoc_order_by_value' => true,
    // The type of `@return` annotations of methods returning a reference to itself must the configured one.
    'phpdoc_return_self_reference' => true,
    // Scalar types should always be written in the same form. `int` not `integer`, `bool` not `boolean`, `float` not `real` or `double`.
    'phpdoc_scalar' => true,
    // Annotations in PHPDoc should be grouped together so that annotations of the same type immediately follow each other. Annotations of a different type are separated by a single blank line.
    'phpdoc_separation' => true,
    // Single line `@var` PHPDoc should have proper spacing.
    'phpdoc_single_line_var_spacing' => true,
    // PHPDoc summary should end in either a full stop, exclamation mark, or question mark.
    'phpdoc_summary' => true,
    // Fixes casing of PHPDoc tags.
    'phpdoc_tag_casing' => true,
    // Forces PHPDoc tags to be either regular annotations or inline.
    'phpdoc_tag_type' => true,
    // PHPDoc should start and end with content, excluding the very first and last line of the docblocks.
    'phpdoc_trim' => true,
    // Removes extra blank lines after summary and after description in PHPDoc.
    'phpdoc_trim_consecutive_blank_line_separation' => true,
    // The correct case must be used for standard PHP types in PHPDoc.
    'phpdoc_types' => true,
    // `@var` and `@type` annotations must have type and name in the correct order.
    'phpdoc_var_annotation_correct_order' => true,
    // `@var` and `@type` annotations of classy properties should not contain the name.
    'phpdoc_var_without_name' => true,
    // Converts `protected` variables and methods to `private` where possible.
    'protected_to_private' => true,
    // Local, dynamic and directly referenced variables should not be assigned and directly returned by a function or method.
    'return_assignment' => true,
    // Inside a `final` class or anonymous class `self` should be preferred to `static`.
    'self_static_accessor' => true,
    // Instructions must be terminated with a semicolon.
    'semicolon_after_instruction' => true,
    // Converts explicit variables in double-quoted strings and heredoc syntax from simple to complex format (`${` to `{$`).
    'simple_to_complex_string_variable' => true,
    // Simplify `if` control structures that return the boolean result of their condition.
    'simplified_if_return' => true,
    // A return statement wishing to return `void` should not return `null`.
    'simplified_null_return' => true,
    // Single-line comments must have proper spacing.
    'single_line_comment_spacing' => true,
    // Throwing exception must be done in single line.
    'single_line_throw' => true,
    // Convert double quotes to single quotes for simple strings.
    'single_quote' => true,
    // Ensures a single space after language constructs.
    'single_space_after_construct' => true,
    // Fix whitespace after a semicolon.
    'space_after_semicolon' => true,
    // Increment and decrement operators should be used if possible.
    'standardize_increment' => true,
    // Replace all `<>` with `!=`.
    'standardize_not_equals' => true,
    // Each statement must be indented.
    'statement_indentation' => true,
    // Switch case must not be ended with `continue` but with `break`.
    'switch_continue_to_break' => true,
    // Arrays should be formatted like function/method arguments, without leading or trailing single line space.
    'trim_array_spaces' => true,
    // A single space or none should be around union type and intersection type operators.
    'types_spaces' => true,
    // Unary operators should be placed adjacent to their operands.
    'unary_operator_spaces' => true,
    // In array declaration, there MUST be a whitespace after each comma.
    'whitespace_after_comma_in_array' => true,
    // Write conditions in Yoda style (`true`), non-Yoda style (`['equal' => false, 'identical' => false, 'less_and_greater' => false]`) or ignore those conditions (`null`) based on configuration.
    'yoda_style' => true,
];
