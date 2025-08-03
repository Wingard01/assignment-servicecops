// Function to find the length of the longest substring without repeating characters
function lengthOfLongestSubstring(s) {
    let start = 0; // Start index of the current window
    let maxLength = 0; // To store the length of the longest substring
    let seenChars = new Map(); // Map to store characters and their latest index

    // Loop through the string character by character
    for (let end = 0; end < s.length; end++) {
        const currentChar = s[end];

        // If character is already seen and is within the current window
        if (seenChars.has(currentChar) && seenChars.get(currentChar) >= start) {
            // Move the start to the right of the previous occurrence to avoid repetition
            start = seenChars.get(currentChar) + 1;
        }

        // Update the character's latest position
        seenChars.set(currentChar, end);

        // Calculate the length of the current window and update maxLength if it's larger
        maxLength = Math.max(maxLength, end - start + 1);
    }

    // Return the maximum length found
    return maxLength;
}


console.log(lengthOfLongestSubstring("abcabcbb")); // Output: 3 ("abc")
console.log(lengthOfLongestSubstring("bbbbb"));    // Output: 1 ("b")
console.log(lengthOfLongestSubstring("pwwkew"));   // Output: 3 ("wke")
