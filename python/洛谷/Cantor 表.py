def s(k):
    return k * (k + 1) / 2


a = int(input())  # 输入
k = 1
while True:
    if s(k) >= a:
        break
    k += 1
index = a - s(k - 1)
if k % 2 == 0:
    print("%d/%d" % (index, k - index + 1))
elif k % 2 == 1:
    print("%d/%d" % (k - index + 1, index))

# 算法：
'''
根据题意按照斜线将数分类，第一条斜线有1个数，第二条斜线有两个数，第三条斜线有3个数，第i条斜线有i个数……
这样前i条斜线上数的总和为k(k+1)/2,即为等差数列前k项之和（S(k)）
设要求的数为n，那么n就是第k条直线上第S(k)-n+1个元素（最后一个数是倒数第1个数，不是倒数第0个）
所以第k条斜线的倒数第i个元素为i/(k+1-i)
'''