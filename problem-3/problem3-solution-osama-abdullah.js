
const data = {
    fridge: {"tomato": 2},
    ingredients: {},
};

function validateRecipeWithQuantity() {
    for (const key in data.ingredients) {
        if (!(key in data.fridge) || data.fridge[key] < data.ingredients[key]) return false;
    }
    return true;
}

function addItem(item, count) {
    if (item in data.fridge) {
        data.fridge[item] += parseInt(count);
        return;
    }
    data.fridge[item] = parseInt(count);
}

function removeItem(item) {
    delete data.fridge[item];
}
