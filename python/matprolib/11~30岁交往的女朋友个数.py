from matplotlib import pyplot as plt, font_manager

fig = plt.figure(figsize=(20, 8), dpi=80)
font = font_manager.FontProperties(fname="C:\Windows\Fonts\msyh.ttc")
x = range(11, 31)
y = [1, 0, 1, 1, 2, 4, 3, 2, 3, 4, 4, 5, 6, 5, 4, 3, 3, 1, 1, 1]
plt.plot(x, y)
plt.xticks(x, [f"{i}岁" for i in range(11, 31)], fontproperties=font)
plt.xlabel('年龄', fontproperties=font)
plt.ylabel('交往的女朋友个数', fontproperties=font)
plt.title('11~30岁交往的女朋友个数', fontproperties=font)
plt.grid(alpha=0.1)  # 绘制网格  alpha:透明度（0~1）
plt.show()
