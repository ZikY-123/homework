k = int(input())
s = 0
n = 1
while True:
    s += 1/n
    if s > k:
        print(n)
        break
    n += 1
