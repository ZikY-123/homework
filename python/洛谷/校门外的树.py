def tree(l, n):
    data = []
    result = []
    result_1 = []
    for i in range(l + 1):
        data.append(i)
    for i in range(n):
        uv = list(map(int, input().split()))
        for j in range(len(data)):
            if uv[0] <= data[j] <= uv[1]:
                result.append(data[j])
    for j in result:
        if j not in result_1:
            result_1.append(j)
    print(len(data) - len(result_1))


if __name__ == '__main__':
    l, n = map(int, input().split())  # 马路长度l + 计数器n
    tree(l, n)
'''
AC代码
a = input("")
lt = a.split()
line_num = eval(lt[-1])
tree_num = eval(lt[0])+1

tree = []
for i in range(tree_num):
    tree.append(1)

for i in range(line_num):
    line = input("")
    lt1 = line.split()
    Lnum = eval(lt1[0])
    Rnum = eval(lt1[-1])
    for j in range(Lnum, Rnum+1):
        tree[j] = 0

print(tree.count(1))
'''