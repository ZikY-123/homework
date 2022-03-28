number = int(input())
n = number
i = 2
while n != 1:
    if n % i == 0:
        x = int(n / i)
        print(x)
        break
    else:
        i += 1
