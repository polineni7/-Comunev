exp=[10,20,'+']

exp1 = [10, 21, 32, 23, '+', 12, '*', 10, 22, '/', '-']

import operator
import collections

OPERATION ={'+' : operator.add, '*' : operator.mul,'-':operator.sub, '/':operator.floordiv}

def ev_rnp(exp):
	stack = []
	#stack = collections.deque()
	for i in exp:
		if i == OPERATION:
			operand2=stack.pop()
			operand1=stack.pop()  
			result=OPERATION[i](operand1, operand2)
			stack.append(result)
		else:
			stack.append(i)
		print(stack)
	return stack.pop()


ev_rnp(exp1)

