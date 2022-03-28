a = 1
b = 0
while a <= 100:
    if a % 2 == 0:
        b = a + b
    a += 1
print("1~100之间的偶数和为：", b)
