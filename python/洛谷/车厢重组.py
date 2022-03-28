n = int(input())
initial_order = list(map(int, input().split()))
temp = []  # 临时数组
a = 0  # 调整次数
if len(initial_order) % 2 == 0:  # 双数数组
    mid = (len(initial_order) - 1) // 2  # 中间值
    for i in range(mid + 1):
        temp.append(initial_order[i])  # 加入临时数组
    # 判断大小
    for i in range(len(temp)):
        for j in range(0, len(temp) - i - 1):
            if temp[j] > temp[j + 1]:
                temp[j], temp[j + 1] = temp[j + 1], temp[j]
                a += 1
    # 加入其余数
    for i in range(int(mid + 1), len(initial_order)):
        temp.append(initial_order[i])
    # 判断大小
    for i in range(len(temp)):
        for j in range(0, len(temp) - i - 1):
            if temp[j] > temp[j + 1]:
                temp[j], temp[j + 1] = temp[j + 1], temp[j]
                a += 1
    print(a)

elif len(initial_order) % 2 != 0:  # 单数数组
    mid = len(initial_order) // 2  # 中间值
    for i in range(mid):
        temp.append(initial_order[i])  # 加入临时数组
    # 判断大小
    for i in range(len(temp)):
        for j in range(0, len(temp) - i - 1):
            if temp[j] > temp[j + 1]:
                temp[j], temp[j + 1] = temp[j + 1], temp[j]
                a += 1
    # 加入其余数
    for i in range(mid, len(initial_order)):
        temp.append(initial_order[i])
    # 判断大小
    for i in range(len(temp)):
        for j in range(0, len(temp) - i - 1):
            if temp[j] > temp[j + 1]:
                temp[j], temp[j + 1] = temp[j + 1], temp[j]
                a += 1
    print(a)

# 主要考察归并排序
'''
N = 10005
res = 0
temp = [0] * N  # 临时数组，必须使用这种方式才可以，如果直接用.append()的话，会出现问题


# 使用归并排序
def mergesort(left, right):
    global res
    global temp
    if left >= right:  # 直接返回
        return
    mid = (left + right) // 2  # 直接二分
    mergesort(left, mid)
    mergesort(mid + 1, right)

    # 开始合并
    index = tl = left
    tr = mid + 1
    while tl <= mid and tr <= right:
        if arr[tl] <= arr[tr]:
            temp[index] = arr[tl]  # 开始赋值
            tl += 1
            index += 1

        # 如果是从右侧开始赋值，说明左侧的值要大
        if arr[tr] <= arr[tl]:
            temp[index] = arr[tr]  # 开始赋值
            tr += 1
            index += 1
            res += (mid - tl + 1)

    # 赋值剩余的数组值
    while tl <= mid:
        temp[index] = arr[tl]
        tl += 1
        index += 1

    while tr <= right:
        temp[index] = arr[tr]
        index += 1
        tr += 1
        res += (mid - tl + 1)

    # 写回到arr 数组中
    for i in range(left, right + 1):
        arr[i] = temp[i]


n = input()
n = int(n)
arr = []
while len(arr) < n:  # 如果没有读够n个数字
    num = input()
    nums = num.strip().split()
    nums = [int(i) for i in nums]
    for i in nums:
        arr.append(i)
# print(arr)

# 进行一个归并排序
mergesort(0, n - 1)
# for i in range(n):
#     print(arr[i],end = " ")
print(res)

'''
