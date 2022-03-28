data = []
result = []
for i in range(7):
    number = list(map(int, input().split()))
    data.append(number[0] + number[1])
    result.append(data[i])
    data.sort()
if data[6] > 8:
    for i in range(len(result)):
        if data[6] == result[i]:
            print(i + 1)
            break
else:
    print(0)