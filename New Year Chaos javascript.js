function minimumBribes(q) {
    // Write your code here
    let bribeCount = []
    let high = 0;

    for (let i = 0; i < q.length; i++) {
        let val = q[i]
        bribeCount[val] = 0
        high = Math.max(val, high)  // update the highest value encountered

        if (val < high) {
            // if current value < high value, increment value for all bribeCount indices > val
            for (let j=val+1; j < bribeCount.length; j++) {
                bribeCount[j]++
                if (bribeCount[j] > 2) {
                    console.log("Too chaotic")
                    return;
                }
            }
        }
    }
    const sum = bribeCount.reduce((a,b) => a + b, 0)  // sum
    console.log(sum);
}