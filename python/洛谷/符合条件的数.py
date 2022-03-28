# 给出 N 和 k，找到一个不小于 N 的正整数，满足这个数中有 k 位数字是 3，且尽可能小。
# 输入：2333334 6;输出：3033333
n = input()
k = input()
t = ''
for i in range(int(k)) :
    t += '3'
if int(t) < int(n):
    while int(t) < int(n):
        t += '3'
elif int(t) == int(n):
    print(int(t))
else:
    n