---
doc: cookies
title: Cookie政策
version: 1.1.0
updated: 2026-10-31
lang: zh-Hans
translation_of: 1.1.0
status: draft
summary: {{product.name}} 使用哪些 Cookie 及类似技术、出于何种目的，以及如何控制它们。
---

# Cookie政策

*版本 {{doc.version}}，最后更新于 {{doc.updated}}。*

本政策说明 **{{company.name}}** 如何在 {{product.name}} 及我们的其他服务中使用 Cookie 及类似技术。通过这些技术处理的个人信息，依照[隐私政策]({{url.privacy}})所述进行处理。

## 1. 它们是什么 {#what}

Cookie 是网站存储在您设备上的小型文件。“类似技术”包括本地存储和会话存储、设备标识符、移动应用中的 SDK、像素代码以及类似指纹识别的信号。本政策将所有这些技术统称为“Cookie”。

## 2. 我们使用的类别 {#categories}

| 类别 | 用途 | 是否需要同意？ |
|---|---|---|
| **严格必要** | 保持您的登录状态，在会话期间记住您的购物车或设置，防范欺诈和 CSRF 攻击，平衡服务器负载，存储您的 Cookie 选择 | 否：这是服务正常运行或提供您所要求的内容所必需的 |
| **偏好设置** | 记住语言、主题、布局及类似的选择 | 是，除非该项功能是您所要求的且严格必要 |
{{#if feature.analytics}}| **分析** | 衡量服务的使用情况，并发现错误，以便我们改进服务 | 是（法律要求时） |
{{/if}}{{#if feature.ads}}| **广告/营销** | 展示和衡量相关广告，限制重复展示，并跨网站和应用关联活动 | 是 |
{{/if}}
{{#unless feature.analytics}}{{#unless feature.ads}}目前我们**仅使用严格必要Cookie和偏好设置Cookie**，不使用分析或广告Cookie。{{/unless}}{{/unless}}

## 3. 各 Cookie 的详细信息 {#list}

{{#if table.cookies}}
{{table.cookies}}
{{else}}
Cookie 的具体名称、提供方和有效期列于 Cookie 设置对话框中，也可通过 [{{company.privacy_email}}](mailto:{{company.privacy_email}}) 索取。
{{/if}}

## 4. 您的选择 {#choices}

- **同意横幅/设置。** 在需要同意的情况下，我们会在设置非必要 Cookie 之前征求您的同意，并提供与接受同样便捷的拒绝选项。您可以随时通过页脚中的 Cookie 设置链接更改或撤回您的选择。撤回不影响此前的处理。
- **浏览器控制。** 大多数浏览器允许您阻止或删除 Cookie；请在“设置”→“隐私”中查找。阻止严格必要的 Cookie 可能导致登录和其他功能无法使用。
- **不进行会话录制。** 我们不使用会话回放或屏幕录制工具。
{{#if feature.external}}- **第三方资源。** 当某项资源（例如字体、地图或视频）从另一家公司的服务器加载时，您的 IP 地址会被发送给该公司。我们会在 Cookie 设置中就每项资源分别征求您的同意，并且只有在您同意后才会加载；您可以随时更改您的选择。
{{/if}}- **信号。** 我们将全局隐私控制（Global Privacy Control，GPC）及类似的浏览器退出信号视为拒绝非必要跟踪，以及拒绝出售或共享个人信息。
{{#if feature.ads}}- **广告选择。** 您可以通过设备设置（重置或限制您的广告标识符），以及 youronlinechoices.eu 或 optout.aboutads.info 等工具，选择退出基于兴趣的广告。您仍会看到广告，只是相关性较低。
{{/if}}
## 5. 保存期限 {#duration}

会话 Cookie 会在您关闭浏览器时过期。持久性 Cookie 的保存期限以表中所示为准，且在任何情况下均不超过法律建议的期限（通常，分析和广告类同意的 Cookie 不超过 13 个月，届时我们会请您重新同意）。

## 6. 第三方 {#third-parties}

部分 Cookie 由我们所使用服务的第三方设置（例如分析、嵌入式媒体、付款和支持聊天）。这些第三方依据其自身政策行事；如果它们是独立的个人信息处理者，您应阅读其政策。我们已在上表中列明了这些第三方。
{{#if table.external}}
加载时会接收您的 IP 地址的资源：

{{table.external}}
{{/if}}

## 7. 变更 {#changes}

如果我们增加或变更非必要 Cookie，我们将更新本政策，并在需要时重新征求您的同意。如有问题，请发送邮件至 [{{company.privacy_email}}](mailto:{{company.privacy_email}})。
