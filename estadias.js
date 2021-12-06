const formatArray = (arr) => {
  let newArray = [];
  let newArray2 = [];
  let newArray3 = [];

  for (let i = 0; i < arr.length; i++) {
    if (arr[i] !== arr[i + 1]) {
      newArray.push(arr[i]);
    } else {
      newArray2.push(arr[i]);
    }
  }

  for (let i = 0; i < arr.length; i++) {
    if (newArray2[i] !== newArray2[i + 1]) {
      newArray3.push(newArray2[i]);
    }
  }

  newArray = newArray.concat(newArray3);

  return newArray;
};

const result = formatArray([1, 1, 2, 2, 3, 3, 1, 1, 1, 2, 3]);
console.log(result);
