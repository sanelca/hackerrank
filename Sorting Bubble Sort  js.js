function countSwaps(a) {
    // Write your code here
    var count = 0, n = a.length;
    for (var i = 0; i < n; i++) {
        for (var j = 0; j < n - 1; j++) {
            if (a[j] > a[j + 1]) {
                var tmp = a[j];
                a[j] = a[j + 1];
                a[j + 1] = tmp;
                count++;
            }
        }
    }
    console.log("Array is sorted in " + count + " swaps.");
    console.log("First Element: " + a[0]);
    console.log("Last Element: " + a[n - 1]);
}
