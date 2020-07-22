<template>
    <ul id="navigation">
        <li v-for="item in navList" :key="item.name">
            <div v-if="item.children">
                <li
                    
                    :title="item.name"
                    @click="(isOpen = !isOpen), (active = !active)"
                    :class="{ active }"
                    >{{ item.name }}
                </li>
                <div :class="{ isOpen }" class="dropdow">
                    <ul>
                        <li
                            v-for="{
                                url,
                                name,
                                index,
                                target
                            } in item.children"
                            :key="index"
                        >
                            <a :href="url" :title="name" :target="target">{{
                                name
                            }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div v-else>
                <a :href="item.url" :title="item.name">{{ item.name }}</a>
            </div>
        </li>
    </ul>
</template>

<script>
export default {
    // name: Navigation,
    props: ["item"],
    data() {
        return {
            isOpen: true,
            active: false,
            navList: [
                {
                    url: "#",
                    name: "Services",
                    children: [
                        {
                            url: "https://twitter.com/andrejsharapov",
                            name: "Twitter",
                            target: "_blank"
                        },
                        {
                            url: "https://dribbble.com/andrejsharapov",
                            name: "Dribbble",
                            target: "_blank"
                        },
                        {
                            url: "https://www.behance.net/andrejsharapov",
                            name: "Behance",
                            target: "_blank"
                        },
                        {
                            url: "https://www.instagram.com/andrej.sharapov/",
                            name: "Instagram",
                            target: "_blank"
                        }
                    ]
                },
            ]
        };
    }
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css?family=Raleway&display=swap");


ul {
  list-style-type: none;

  }
  li{

    position: relative;
    margin: 0.25em;
    text-align: center;
  }

  a{
    display: block;
      padding: 0.55em 1em;
      text-decoration: none;
      color: darken(white, 15%);
      border-radius: 0.35em;
      background-color: rgba(black, 0.25);
      transition: all 200ms ease; 
  }

.dropdown {
  position: absolute;
  left: 50%;
  transform: translatex(-50%) 

}

.isOpen {
    transform: translatex(-50%);
    /* visibility: visible; */
    opacity: 1;
}
  


</style>
