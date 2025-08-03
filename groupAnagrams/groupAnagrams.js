function groupAnagrams(words) {
    const anagramMap = new Map();

    for (const word of words) {
        // Sort the word to get the key (e.g., "eat" -> "aet")
        const sorted = word.split('').sort().join('');

        // If the key is not in the map, add it with an empty array
        if (!anagramMap.has(sorted)) {
            anagramMap.set(sorted, []);
        }

        // Push the word into the correct anagram group
        anagramMap.get(sorted).push(word);
    }

    // Return the grouped anagrams as an array of arrays
    return Array.from(anagramMap.values());
}

// Test
console.log(groupAnagrams(["eat", "tea", "tan", "ate", "nat", "bat"]));
// Output: [["eat", "tea", "ate"], ["tan", "nat"], ["bat"]]
