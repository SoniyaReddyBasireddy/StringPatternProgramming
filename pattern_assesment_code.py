#python code to get all possible patterns by using input 
def getPatterns(input_str, prefix=0):
	values = {'1': ['A', 'B', 'C'],
			  '2': ['D', 'E'],
			  '12': ['X'],
			  '3': ['P', 'Q']}

	if prefix == len(input_str)-1:
		return values.get(input_str[prefix], [])
	possible_patterns = list()
	for i in range(prefix, len(input_str)-1):
		sub_string = getPatterns(input_str, i+1)
		for l1 in sub_string:
			for l2 in values.get(input_str[prefix:i+1], []):
				possible_patterns.append(l2+l1)
	return possible_patterns
print(getPatterns('123'))