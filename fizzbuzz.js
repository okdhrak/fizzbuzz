var FizzBuzz = function(num) {
	let answer = "";
	answer += (!(num % 3)) ? "Fizz" : "";
	answer += (!(num % 5)) ? "Buzz" : "";
	answer += (!answer.length) ? num : "";
	return answer;
}

for (let i = 1; i <= 100; i++) {
	console.log(FizzBuzz(i));
}
