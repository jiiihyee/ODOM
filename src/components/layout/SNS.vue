<template>
    <div class="go-sns">
            <i class="fa-brands fa-instagram sns" @click="goInsta()"></i>
        <img class="kakao sns" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAFF0lEQVRoge2ZW2xVRRSG/ykFCmqpBKUm3EQBI6gJBY0KQVuBQEBFBY0hUV+NeElEjSEREU28xEvii+kLkoCpXB6IUfGFSqQGlcRIUbkpoOGWFgQp5drPh1mHTjfntGfvs08ak/MnO7Nnzcxa/9p7Zs3staUSSiihhP8TXFqKgJGS7pY0UdI4SaMkDZJ0pXU5JekfSfsk7ZK0TdIW59yBtDgkBnA98DrQTHJsB5YCowrhkuiNAJMkLZE0V1KZic9I2ipps/zT3i+pVf5NSP7NDJE0Uv6tTZN0u6QKa++QtEHScufctiS84jhQDawEOuxpXgDWAdOB/gn09QdmAOtNF6Z7BTC0GD4ImA0cNWNngLeB4SnqHwG8A5w1G0eAWWnpzxh5DrhoBpqA8aka6GprDLApeDtL01L8VjCNFgNlPY8q2GYZ8FIw3d4oVOHzpugscH9KPOPYnxdMtUVJlUwBztuUejhljnF4LLApdg64K+7g/sBOexLLisQxDp/M9P4N6Bdn4As28BegbxE55sunH52b7rP5DuoL/GWD0g1/BQCYY5z2AeX5DJhpA5oBF8jfD6JIFDuBSuA24ACwDRgc0bva+g2LyB8A2oHFgawW+AGoDWQO+N3s3RflnS2UzrFyjXOOQD5OUp8c/o+QP4J8KGm4/BFkSaTPfEljJd0RkU+VP6bUGeE6SV9ImixpRqaTcWmw6twcPDoBfG9e3xORDwRq7GqzPi9afRgw2qJLZuM8Gi7M4G0+EtH7nsm/BuqA01b/BhgQ6VtrbVvycSRzDMl51gH+tT4PBbJlJlsL7LH7eTEcOdCdE9a32tqPRNuyTa0qK4/36HWngTJJT1h1taTP7P6pfHXIT8kB8qfl+c659ix9jkU4XkI2R85aWZGlLRfq5NfJSUlfSlpl8lnAdTH0SH6tLc/Rlpmq56IN2RxpsfLaGMYzT36gpIOSmqxeLmlhnjp+kvSm3T8DLMjSpzrC8RKyObLDykn5WAeqJD1o1XJJV9uVwZORIUMtMIym637QKuk1SZusXg+MiYydaGVzlEc2RzIR4bJYnQNz5ed2m/w8H2zXNGu/GZgQ9P9Y0l67GgK5nHMXJT0u6bCkSvlwHmK2ld/l48g6SUh6FKjMQb5Jfj1sl9Qu6bykeufc386543ZtlvSt/OLtkLRWPoBkrlZJv0pqtIew0Zw5LOkxSYfkp5skCRgkaZ5xW5eDV1cAjRbmXu2mT9/gPtdG2W1bHABLjNPGOIOm2aBT+DRPrwKfrWmzDXdq3MFrzJkmEiQW0gL+k2KrcVmZRMFg/EkTYFVaUyQmhz5Ag3HYY+skkaIa4IQp+pw4HzUFAqgwmwCtkciXSOGdgTM/AjemxLU7mxPwx3iAFmByWopvAXab4pP4DEfq68bWwzI6Ew67gZvSNlJlayWDPwg+fArUPQR4Bdgf6F8BXJWG/lxGpwdTLXF2BZ9ZXIhPwbYHDvwM3BtXX+wktkWOFvkd9hrn3IlI+xRJT8vv3sfsuih/jKmWPyXXyCezLw2T3+E/krQh8mVaHOCTZgCNEXkF8C6dX4g94TQ+NboYuKFQXj1nIy7HTCu/CpyokfSppPHyT/8D+d8KVfI/e/rIn8laTL5L0g7n3IXEzAsFsNee6K1AOfByEGX2EvcI0RsAxhrhg8B4/L4C/gz0CXBFb3PMC8AiI34I/48E4M8kUaZXAdQHi7XD6sWL9cUCPu+0z6JNNNFWQgkllFB8/AfxL3G9XqWeQgAAAABJRU5ErkJggg==" @click="goKakao()"/>
        <i class="fa-sharp fa-solid fa-n sns" @click="goBlog()"></i>            
        </div>
</template>

<script>
export default {

}
</script>

<style>
  .go-sns{
    display: flex;
    align-items: center;
    justify-content: flex-end
  }
  .kakao{
    width: 22px;
    margin: 0% 50% 0% 50%;
  }
  .sns{
    cursor: pointer;
  }
</style>