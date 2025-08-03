# Group Anagrams (JavaScript)

This script groups a list of strings into groups of anagrams using a hash map and sorted keys for efficiency.

##

Input:
`js
["eat", "tea", "tan", "ate", "nat", "bat"]

 # output

[["eat", "tea", "ate"], ["tan", "nat"], ["bat"]]


# How it Works
Each word is sorted alphabetically (e.g. "eat" → "aet").

We use the sorted string as a key in a Map.

Words with the same key are grouped together.

