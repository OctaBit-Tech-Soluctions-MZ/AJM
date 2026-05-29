<template>
    <div>
        <div class="flex justify-between items-center mb-2">
            <label 
                :for="id"
                class="block text-[#001b3d] text-xs font-bold">{{ label }}</label>
        </div>
        <div class="relative">
            <i class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400" :class="icon"></i>
            <input 
                :type="type" 
                :placeholder="placelholder"
                v-model="model"
                :id="id"
                :class="{ 'input-error': error }"
                class="w-full pl-11 pr-11 py-3 rounded-xl border border-gray-200 focus:border-[#001b3d] focus:ring-0 text-sm outline-none transition-all">
                <small v-if="error" class="text-red">{{ error }}</small>
        </div>
    </div>
</template>
<script>
export default {
    name: "TextField",

    props: {
        modelValue: [String, Number],
        label: String,
        id: String,
        type: {
            type: String,
            default: "text"
        },
        placeholder: String,
        error: {
            type: String,
            default: ""
        },
        icon: {
            type: String,
            default: ""
        }
    },

    computed: {
        model: {
            get() {
                return this.modelValue;
            },
            set(value) {
                this.$emit("update:modelValue", value);
            }
        }
    }
};
</script>

<style scoped>
.input-error {
    border: 1px solid #e3342f !important;
}
</style>