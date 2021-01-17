Object.prototype.empty = function () {
    return Object.values(this).length === 0;
};

export function sleep(milliseconds = 1000) {
    return new Promise((resolve) => setTimeout(resolve, milliseconds));
}

export function pull(key, object) {
    if (typeof key === 'number') {
        key = key.toString();
    }

    if (typeof key !== 'string') {
        throw new TypeError('Key must be a string');
    }

    return object.hasOwnProperty(key) ? object[key] : null;
}