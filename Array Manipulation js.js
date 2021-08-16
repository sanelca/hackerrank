function arrayManipulation(n, queries) {
    // Write your code here
    let max = 0;
    const params = [];

    for(let q=0; q<queries.length; q++){

        const query = queries[q];
        const qstart = query[0];
        const qend = query[1];
        const qval = query[2];

        params.push({
            key: qstart,
            val: qval
        });

        params.push({
            key: qend,
            val: -qval
        });
    }

    //sort the parameters by key
    params.sort((item1, item2) => {
        if(item1.key === item2. key){
            return item2.val - item1.val;
        }

        return item1.key - item2.key;
    });

    let sum = 0;

    for(let i=0; i<params.length; i++){
        const param = params[i];
        sum += param.val;

        if(sum > max){
            max = sum;
        }
    }

    return max;
}