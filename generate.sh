#!/bin/bash

# Default values
CONFIG="./config.yaml"
INPUT_SPEC=""

# Parse arguments
for arg in "$@"
do
    case $arg in
        --spec=*)
        INPUT_SPEC="${arg#*=}"
        shift
        ;;
        -c|--config)
        CONFIG="$2"
        shift
        shift
        ;;
        *)
        # unknown option
        ;;
    esac
done

# Build the command
COMMAND="npx @openapitools/openapi-generator-cli generate -c $CONFIG"
if [ -n "$INPUT_SPEC" ]; then
    COMMAND="$COMMAND --input-spec=$INPUT_SPEC"
fi

# Clean generated directories before regenerating
rm -rf src/Api/ src/Model/ test/Api/ test/Model/ docs/
eval $COMMAND

# The .php-cs-fixer config enables risky rules (strict_comparison, strict_param),
# so --allow-risky=yes is required or the fixer aborts and leaves generated code
# unformatted. Set PHP_CS_FIXER_IGNORE_ENV=1 if your local PHP is newer than the
# SDK's supported range (7.4–8.3), otherwise the fixer refuses to run.
vendor/bin/php-cs-fixer fix --allow-risky=yes
