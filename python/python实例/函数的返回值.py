def fun(num):
    odd = []  # 存奇数
    even = []  # 存偶数
    for i in num:
        if i % 2:
            odd.append(i)
        else:
            even.append(i)
    return odd, even


# 调用函数
lst = [10, 29, 33, 61, 15, 7, 64]
print(fun(lst))
