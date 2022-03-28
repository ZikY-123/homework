a = input().split()  # 苹果到地面的高度
b = int(input())  # 陶陶把手伸直能够达到的最大高度
c = 0  # 计数器
for i in range(len(a)):
    if b + 30 >= int(a[i]):
        c += 1
print(c)
'''
a = map(int, input().split())
b = int(input())
c = 0
for i in a:
    if 100 <= b <= 120:
        if i <= b + 30:
            c += 1
print(c)
'''