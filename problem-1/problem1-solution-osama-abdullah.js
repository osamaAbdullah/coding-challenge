const fs = require('fs')


const validateRecipe = function (fridge, ingredients) {
    if (!Array.isArray(fridge) || !Array.isArray(ingredients)) throw 'argument1 and argument2 must be array';
    return ingredients.every(val => fridge.includes(val))
};

// basic output
console.log(validateRecipe(['tomato', 'banana', 'apple', 'onion', 'cucumber'], ['tomato', 'onion', 'lettuce']));

console.log(validateRecipe(['onion', 'banana', 'lettuce', 'olives'], ['olives', 'onion', 'lettuce']));

// reading from json file
fs.readFile('inputs.json', 'utf8', (err, data) => {
    if (err) {
        throw err;
    }
    const parsedData = JSON.parse(data);
    console.log(validateRecipe(parsedData.fridge, parsedData.ingredients));
})


// reading commandline arguments
if (process.argv.length === 4) {
    const ingredients = JSON.parse(process.argv[2]);
    const fridge = JSON.parse(process.argv[3]);

    if (!Array.isArray(ingredients) || !Array.isArray(fridge)) throw 'invalid arguments';

    console.log(validateRecipe(fridge, ingredients));
}

exports.validateRecipe = validateRecipe;