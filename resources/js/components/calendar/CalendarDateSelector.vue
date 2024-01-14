<template>
  <div class="calendar-date-selector">
    <span @click="selectPrevious"> Предыдущий месяц </span>
    <span @click="selectCurrent">Сегодняшний день</span>
    <span @click="selectNext">Следующий месяц</span>
  </div>
</template>

<script>
import dayjs from "dayjs";

export default {
  name: "CalendarModeSelector",

  props: {
    currentDate: {
      type: String,
      required: true
    },

    selectedDate: {
      type: Object,
      required: true
    }
  },

  methods: {
    selectPrevious() {
      let newSelectedDate = dayjs(this.selectedDate).subtract(1, "month");
      this.$emit("dateSelected", newSelectedDate);
    },

    selectCurrent() {
      let newSelectedDate = dayjs(this.currentDate);
      this.$emit("dateSelected", newSelectedDate);
    },

    selectNext() {
      let newSelectedDate = dayjs(this.selectedDate).add(1, "month");
      this.$emit("dateSelected", newSelectedDate);
    }
  }
};
</script>

<style scoped>
.calendar-date-selector {
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  width: 580px;
  color: #1f6d17;
}

.calendar-date-selector > * {
  cursor: pointer;
  user-select: none;
}
</style>