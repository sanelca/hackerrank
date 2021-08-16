function minimumSwaps(arr) {
    let minSwaps = 0;
    arr.map((item,index) => {
        if (item !== index+1) {
            const rightIndex = arr.indexOf(index+1, index);
            [arr[index], arr[rightIndex]] = [arr[rightIndex], arr[index]];
            ++minSwaps;
        }
    });
    return minSwaps;
}