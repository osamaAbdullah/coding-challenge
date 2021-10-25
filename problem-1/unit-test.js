const { validateRecipe } = require('./problem1-solution-osama-abdullah');

function assertSame(expected, actual) {
    if (expected === actual) {
        console.log('test passed');
    } else {
        console.log('test failed');
    }
}

assertSame(false, validateRecipe(['tomato', 'banana', 'apple', 'onion', 'cucumber'], ['tomato', 'onion', 'lettuce']))
assertSame(true, validateRecipe(['tomato', 'banana', 'apple', 'onion', 'cucumber'], ['tomato', 'banana', 'cucumber']))
assertSame(true, validateRecipe(['tomato', 'lettuce', 'apple', 'onion', 'cucumber'], ['tomato', 'apple', 'lettuce']))
assertSame(false, validateRecipe([], ['lettuce']))
assertSame(true, validateRecipe([], []))
