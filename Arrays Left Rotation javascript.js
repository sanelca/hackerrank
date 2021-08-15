function rotLeft(a, d) {
    // Write your code here
    d = d % a.length;

    for(let i=0; i<d; i++) a.push(a.shift());

    return a;
}