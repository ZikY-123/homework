data = []
result = 0  # 差值
data_add = 0
a = 0
for i in range(12):
    data.append(int(input()))
for i in range(12):
    if i == 0:
        result = 300 - data[i]
        continue
    else:
        a = 300 + result - data[i]
        result = a
        while True:
            if result >= 100:
                result -= 100
            elif result < 100:
                break
    if result < 0:
        x = -i - 1
        print(x)
        a = 0
        break
if a != 0:
    for i in data:
        data_add += i
    b = 0  # 存储整百数
    result = 3600 - data_add  # 差值
    while True:
        if result >= 100:
            result -= 100
            b += 100
        elif result < 100:
            break
    c = b * 1.2 + result  # 结果
    print(int(c))