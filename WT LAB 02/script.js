function sortAndSearch() {
    const input = document.getElementById("integer-input").value;
    const integers = input.split(",").map(x => parseInt(x));
    const sortedIntegers = integers.sort((a, b) => a - b);
    const sortedOutput = document.getElementById("sorted-output");
    sortedOutput.innerHTML = sortedIntegers.join(", ");
  }
  
  function search() {
    const input = document.getElementById("search-input").value;
    const sortedOutput = document.getElementById("sorted-output").innerHTML;
    const sortedIntegers = sortedOutput.split(",").map(x => parseInt(x));
    const index = sortedIntegers.indexOf(parseInt(input));
    const searchOutput = document.getElementById("search-output");
    if (index === -1) {
      searchOutput.innerHTML = "Integer not found";
    } else {
      searchOutput.innerHTML = `Integer found at index ${index}`;
    }
  }
