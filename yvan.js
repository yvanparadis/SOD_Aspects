// 1. Simple Greeting Function
function greet(name) {
    return `Hello, ${name}!`;
}

// 2. Function Expression for Addition
const add = function(yvan, b) {
    return yvan + b;
};

// 3. Arrow Function for Multiplication
const multiply = (a, b) => a * b;

// 4. Immediately Invoked Function Expression (IIFE)
(function() {
    console.log("This function runs immediately!");
})();

// 5. Recursive Factorial Function
function factorial(n) {
    if (n === 0) return 1;
    return n * factorial(n - 1);
}

// 6. Power Function with Default Parameter
function power(base, exponent = 2) {
    return Math.pow(base, exponent);
}

// 7. Higher-Order Function for Operations
function operate(a, b, operation) {
    return operation(a, b);
}

// Example usage of operate function
const result = operate(5, 3, multiply);

// 8. Asynchronous Function using Promises to Fetch Data
function fetchData(url) {
    return fetch(url)
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error("Error fetching data:", error));
}

// 9. Async/Await Function to Fetch User Data
async function fetchUserData(userId) {
    try {
        let response = await fetch(`https://jsonplaceholder.typicode.com/users/${userId}`);
        let data = await response.json();
        console.log(data);
    } catch (error) {
        console.error("Error fetching user data:", error);
    }
}

// 10. Closure-Based Counter Function
function counter() {
    let count = 0;
    return function() {
        return ++count;
    };
}

const increment = counter();
console.log(increment()); 
console.log(increment()); 
